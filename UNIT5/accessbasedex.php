<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $$amount. New Balance: $$this->balance<br>";
    }
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $$amount. Remaining Balance: $$this->balance<br>";
        } else {
            echo "Insufficient balance!<br>";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
}
// Usage
$account = new BankAccount("123456789", 500);
$account->deposit(200);
$account->withdraw(150);
echo "Final Balance: $" . $account->getBalance();
?>
