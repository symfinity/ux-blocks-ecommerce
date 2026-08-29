import { Controller } from '@hotwired/stimulus';
import { restoreFocus, trapFocus, uiZIndex } from '../shared/overlay-base.js';

export default class extends Controller {
    static targets = ['trigger', 'panel', 'close', 'backdrop'];

    connect() {
        this._open = false;
        this._onKeydown = this._onKeydown.bind(this);
        this._onBackdropClick = this._onBackdropClick.bind(this);
    }

    disconnect() {
        this.close();
    }

    open(event) {
        event?.preventDefault();
        if (!this.hasPanelTarget) {
            return;
        }

        this._open = true;
        this._lastTrigger = event?.currentTarget ?? (this.hasTriggerTarget ? this.triggerTarget : null);
        this.panelTarget.hidden = false;
        this.panelTarget.setAttribute('aria-hidden', 'false');
        this._lastTrigger?.setAttribute('aria-expanded', 'true');
        document.addEventListener('keydown', this._onKeydown);
        document.addEventListener('click', this._onBackdropClick, true);
        this._ensureBackdrop();
        this.panelTarget.querySelector('button')?.focus?.();
    }

    close() {
        if (!this._open) {
            return;
        }

        this._open = false;
        if (this.hasPanelTarget) {
            this.panelTarget.hidden = true;
            this.panelTarget.setAttribute('aria-hidden', 'true');
        }
        if (this.hasTriggerTarget) {
            this.triggerTarget.setAttribute('aria-expanded', 'false');
        }

        document.removeEventListener('keydown', this._onKeydown);
        document.removeEventListener('click', this._onBackdropClick, true);
        this._removeBackdrop();
        restoreFocus(this._lastTrigger);
    }

    _onKeydown(event) {
        if (event.key === 'Escape') {
            event.preventDefault();
            this.close();

            return;
        }

        if (this._open && this.hasPanelTarget) {
            trapFocus(this.panelTarget, event);
        }
    }

    _onBackdropClick(event) {
        if (this.hasPanelTarget && !this.panelTarget.contains(event.target) && event.target?.dataset?.uiOverlayBackdrop !== undefined) {
            this.close();
        }
    }

    _ensureBackdrop() {
        if (this._backdrop) {
            return;
        }
        this._backdrop = document.createElement('div');
        this._backdrop.dataset.uiOverlayBackdrop = '';
        this._backdrop.hidden = false;
        this._backdrop.style.cssText = `position:fixed;inset:0;background:var(--ui-backdrop-color);z-index:${uiZIndex('modal-backdrop')};`;
        document.body.appendChild(this._backdrop);
        if (this.hasPanelTarget) {
            this.panelTarget.style.zIndex = uiZIndex('modal');
            this.panelTarget.style.position = 'fixed';
            this.panelTarget.style.insetBlockStart = '0';
            this.panelTarget.style.insetInlineEnd = '0';
            this.panelTarget.style.maxWidth = '24rem';
            this.panelTarget.style.height = '100%';
        }
    }

    _removeBackdrop() {
        this._backdrop?.remove();
        this._backdrop = null;
    }
}
