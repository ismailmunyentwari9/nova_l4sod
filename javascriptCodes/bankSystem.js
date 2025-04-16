class bankAccount {

    constructor(name,age,id){
        this.name=name
        this.age=age
        this.id=id
        this.balance=0;
        this.loan=0;
    }
    // .......method to withdrow......
    withdrowCash(cashToWithdrow){
        if(this.balance<cashToWithdrow){
            console.log(`Hey ${this.name}, Your Account Balance is ${this.balance}, Please Reacharge your Account..`)
        }
        else{
            this.balance=this.balance-cashToWithdrow
            console.log(`Hey ${this.name}, your new balance is now ${this.balance}`);
        }
    }
    diposeCash(cashtODepose){
      if(cashtODepose<=0){
        console.log(`Hey ${this.name}, Money You're trying to depose is not sufficient...`);
      }
      else{
        this.balance=this.balance+cashtODepose;
        console.log(`Hey ${this.name}, Your new balance now is ${this.balance}`);
      }
    }
    checkBalance(){
        console.log(`Hey ${this.name}, Your Account Balance is ${this.balance}`);
    }
    // .....Request Loan.....
    requestLoan(loanCash){
         if(this.loan !=0){
          console.log(`Hey ${this.name}, You are not allowed to request a loan, first pay your First Loan of ${this.loan}`);
         }
         else{
          this.loan=this.loan+loanCash;
          this.balance=this.balance+this.loan;
          console.log(`Hey ${this.name}, you recieved a your requested loan of ${loanCash}, please make sure to pay your loan before 30 Days...`);
         }
    }
}

const customer1= new bankAccount('John Rudasingwa',35,'11 20002345867478');

const customer2= new bankAccount('James Rudahigwa',45,'11 240506375867478');

customer2.checkBalance();
customer2.requestLoan(200000);
customer2.checkBalance();
customer2.requestLoan(5000);