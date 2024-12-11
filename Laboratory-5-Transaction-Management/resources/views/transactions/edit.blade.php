<h1>Edit Transaction</h1>
<form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name_surname_employee">Name surname Employee</label>
        <input name="name_surname_employee" id="name_surname_employee" type="text" value="{{ $transaction->name_surname_employee }}" required>
    </div>
    <div>
        <label for="name_surname_sender">Name sender</label>
        <input  name="name_surname_sender" id="name_surname_sender" value="{{ $transaction->name_surname_sender }}"  type="text" required>
    </div>
    <div>
        <label for="name_surname_receiver" >Name receiver</label>
        <input name="name_surname_receiver" id="name_surname_receiver" value="{{ $transaction->name_surname_receiver }}" type="text" required>
    </div>
    <div>
        <label for="account_number_sender">Account num sender</label>
        <input name="account_number_sender" id="account_number_sender" value="{{ $transaction->account_number_sender }}" type="number" required>
    </div>
    <div>
        <label for="account_number_receiver">Account num receiver</label>
        <input name="account_number_receiver" id="account_number_receiver" value="{{ $transaction->account_number_receiver }}" type="number" required>
    </div>
    <div>
        <label for="amount">Amount</label>
        <input name="amount" id="amount" value="{{ $transaction->amount }}"  type="number" required>
    </div>
    <button type="submit">Update</button>

</form>
