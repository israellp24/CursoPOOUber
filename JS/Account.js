//Antes de EcmaScript 6
/* function Account(name,document){
    this.id;
    this.name = name;
    this.document = document;
    this.email;
    this.password;
} */

//Con de EcmaScript 6
class Account{
    constructor(name,document,email){
        this.id;
        this.name = name;
        this.document = document;
        this.email=email;
        this.password;
    }
    
    printAccount(){
        console.log("name: "+this.name);
        console.log("document: "+this.document);
        console.log("email: "+this.email);
    }
}