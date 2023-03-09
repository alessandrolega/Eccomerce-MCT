import GeneralPage from './GeneralPage.js';

export default class ExecJs{
    constructor() {
        console.log('pippo')
        this.GeneralPage = new GeneralPage(this);
    }
}