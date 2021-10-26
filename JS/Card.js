class Card extends Payment{
    constructor(id,number,date,ccv){
        super(id);
        this.number=number;
        this.date=date;
        this.ccv=ccv;
    }
}