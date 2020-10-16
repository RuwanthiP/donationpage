@extends('layouts.main')


    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
        <input type="hidden" name="merchant_id" value="1215680">    <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://127.0.0.1:8000/donation/sucess">
        <input type="hidden" name="cancel_url" value="http://127.0.0.1:8000/donation/failed">
        <input type="hidden" name="notify_url" value="http://example.com">  
        <br><br>Donation Details<br>
        <input type="text" name="order_id" value="12345">
        <input type="text" name="items" value="Donation1"><br>
        <input type="text" name="currency" value="LKR">
        <input type="text" name="amount" value="1000">  
        <br><br>Donner Details<br>
        <input type="text" name="first_name" value="Saman">
        <input type="text" name="last_name" value="Perera"><br>
        <input type="text" name="email" value="samanp@gmail.com">
        <input type="text" name="phone" value="0771234567"><br>
        <input type="text" name="address" value="No.1, Galle Road">
        <input type="text" name="city" value="Colombo">
        <input type="hidden" name="country" value="Sri Lanka"><br><br> 
        <input type="submit" value="Donate">   
    </form> 
    