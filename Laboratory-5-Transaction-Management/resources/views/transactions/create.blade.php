<h1>Create Transaction</h1>
<form action="{{ route('transactions.store') }}" method="POST">
    @csrf


    <div>
        <label for="name_surname_employee">Name surname Employee</label>
        <input name="name_surname_employee" id="name_surname_employee" type="text" required>
    </div>
    <div>
    <label for="name_surname_sender">Name sender</label>
    <input  name="name_surname_sender" id="name_surname_sender"  type="text" required>
    </div>
    <div>
        <label for="name_surname_receiver" >Name receiver</label>
        <input name="name_surname_receiver" id="name_surname_receiver" type="text" required>
    </div>
    <div>
        <label for="account_number_sender">Account num sender</label>
        <input name="account_number_sender" id="account_number_sender" type="number" required>
    </div>
    <div>
        <label for="account_number_receiver">Account num receiver</label>
        <input name="account_number_receiver" id="account_number_receiver" type="number" required>
    </div>
    <div>
        <label for="amount">Amount</label>
        <input name="amount" id="amount" type="number" required>
    </div>
    <button type="submit">Create</button>

</form>
