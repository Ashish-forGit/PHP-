<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Account</title>
</head>
<body>

<?php
class BankAccount {
    private $account_number;
    private $balance;

    public function __construct($account_number, $initial_balance) {
        $this->account_number = $account_number;
        $this->balance = $initial_balance;
    }
    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $" . $amount . "<br>";
        } elseif ($amount > $this->balance) {
            echo "Insufficient funds.<br>";
        } else {
            echo "Withdrawal amount must be positive.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $initial_balance = (float)$_POST['initial_balance'];
    $transaction_type = $_POST['transaction_type'];
    $amount = (float)$_POST['amount'];

    $account = new BankAccount($account_number, $initial_balance);

    if ($transaction_type == "deposit") {
        $account->deposit($amount);
    } elseif ($transaction_type == "withdraw") {
        $account->withdraw($amount);
    }

    echo "Current Balance: $" . $account->getBalance() . "<br>";
}
?>

<form method="POST" action="">
    <label for="account_number">Account Number:</label>
    <input type="text" id="account_number" name="account_number" required><br><br>

    <label for="initial_balance">Initial Balance:</label>
    <input type="number" id="initial_balance" name="initial_balance" required><br><br>

    <label for="transaction_type">Transaction Type:</label>
    <select id="transaction_type" name="transaction_type">
        <option value="deposit">Deposit</option>
        <option value="withdraw">Withdraw</option>
    </select><br><br>

    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>


