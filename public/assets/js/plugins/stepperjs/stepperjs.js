class Stepper {
    constructor(props) {
        this.tab = (typeof props.tabName == 'undefined') ? 'step_' : props.tabName;
        this.steps = (typeof props.steps == 'undefined') ? 3 : props.steps;
        this.disabled = (typeof props.disabled == 'undefined') ? false : props.disabled;
        this.init();
    }

    init = () => {
        if (this.disabled == true) {
            this.disableSteps();
        }
        else {
            this.enableSteps();
        }
    }

    disableSteps = () => {
        $(`.step-btn.btn-primary`).attr('disabled', '');
    }

    enableSteps = () => {
        $(`.step-btn.btn-primary`).removeAttr('disabled', '');
    }

    previous = previous => {

    }

    next = next => {

    }

    see = listener => {
        let number = listener.data('number');
        console.log(listener, number);
        for (let start = 1; start < number; start++) {
            let tab = $(`button[data-number='${start}']`);
            this.setTab(tab, 'success');
            this.setView(start, false);
        }
        if (number < this.steps) {
            for (let start = number + 1; start <= this.steps; start++) {
                let tab = $(`button[data-number='${start}']`);
                this.setTab(tab, 'primary');
                this.setView(start, false);
            }
        }
        this.setTab(listener, 'default');
        this.setView(number, true);
    }

    setTab = (entity, kind) => {
        entity.removeClass('btn-primary').removeClass('btn-default').removeClass('btn-success').addClass(`btn-${kind}`);
    }
    setView = (number, showing = false) => {
        let view = $(`#${this.tab}${number}`);
        view.removeClass('show');
        if (showing) {
            view.addClass('show');
        }
    }
}