import {onSelect} from '../services/dom';
import {Component} from './component';

export class AjaxDeleteRow extends Component {

    protected row!: HTMLElement;
    protected url!: string;
    protected deleteButtons: HTMLElement[] = [];

    setup() {
        this.row = this.$el;
        this.url = this.$opts.url;
        this.deleteButtons = this.$manyRefs.delete || [];

        onSelect(this.deleteButtons, this.runDelete.bind(this));
    }

    runDelete() {
        this.row.style.opacity = '0.7';
        this.row.style.pointerEvents = 'none';

        window.$http.delete(this.url).then(resp => {
            if (typeof resp.data === 'object' && resp.data.message) {
                window.$events.emit('success', resp.data.message);
            }
            this.row.remove();
        }).catch(() => {
            this.row.style.removeProperty('opacity');
            this.row.style.removeProperty('pointer-events');
        });
    }

}
