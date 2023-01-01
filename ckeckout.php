<?php include('./header.php');?>
<link rel="stylesheet" href="css/checkuot.css">
    <div id="container mt-5 p-3">
        <span class="place_title">Shipping Address</span>
        <div class="checkout_address">
            <form action="address">
                <p><span>*</span>First Name:</p>
                <input type="text" id="fname">
                <br>
                <p><span>*</span>Last Name:</p>
                <input type="text" id="lname">
                <br>
                <p><span>*</span>Country/Region:</p>
                <select name="CountryName" id="countryName">
                    <option value="">India</option>
                    <option value="">France</option>
                    <option value="">Germany</option>
                    
                    <option value="">Italy</option>
                    <option value="">Portugal</option>
                    <option value="">Canada</option>
                    <option value="">Central African Republic</option>
                    <option value="">Honk Kong,China</option>
                    <option value="">China</option>
                    <option value="">Paris</option>
                    <option value="">Iceland</option>
                    <option value="">Hungary</option>

                    <option value="">Haiti</option>
                    <option value="">Guinea-Bissau</option>

                    <option value="">Laos</option>
                    <option value="">Latvia</option>
                    <option value="">Kosovo</option>
                    <option value="">United Arab Emirates</option>
                    <option value="">United Kingdom</option>
                    <option value="">United States</option>
                    
                </select>
                <br>
                <p><span>*</span>State:</p>
                <select name="StateName" id="stateName">
                    <option value="">Andaman and Nicobar</option>
                    <option value="">Andhra Pradesh</option>
                    <option value="">Assam</option>
                    
                    <option value="">Bihar</option>
                    <option value="">Chandigarh</option>
                    <option value="">Delhi</option>
                    <option value="">Goa</option>
                    <option value="">Gujarat</option>
                    <option value="">Himachal Pradesh</option>
                    <option value="">Jammu and Kashmir</option>
                    <option value="">Jharkhand</option>
                    <option value="">Hungary</option>

                    <option value="">Karnataka</option>
                    <option value=""> Kerala</option>

                    <option value="">Odisha</option>
                    <option value="">Punjab</option>
                    <option value="">Tamil Nadu</option>
                    <option value="">West Bengal</option>
                </select>
                <br>
                <p><span>*</span>City:</p>
                <select name="CityName" id="cityName" aria-placeholder="Please Select A Cityname">
                    <option value="">Kolkata</option>
                </select>
                <br>
                <p><span>*</span>Zip/Postal code:</p>
                <input type="number" placeholder="Your Zip/Postal Code" id="zip">
                <br>
                <p><span>*</span>Address line1:</p>
                <input type="text" name="" id="addressLine1" placeholder="Steet address,company name,P.O box, c/o, etc">
                <br>
                <p>Address line2:</p>
                <input type="text" name="" id="addressLine2" placeholder="Apartment, sutie, unit, building, floor, etc (Optional)">
                <br>
                <p><span>*</span>Phone number:</p>
                <input type="number" name="" id="phone" placeholder="Your phone number">
                <br>
                <input type="submit" value="Save & Place an Order"name="" id="">
            </form>
        </div>
    </div>
    <?php include('./footer.php');?>
<script>
    addressDataLS = JSON.parse(localStorage.getItem('addressData'))||[];
    let form = document.querySelector('form');
    form.addEventListener('submit', addressData);
    function addressData(event) {
        event.preventDefault();
        address = {
            firstName : document.getElementById('fname').value,
            lastName : document.getElementById('lname').value,
            country : document.getElementById('countryName').value,
            state : document.getElementById('stateName').value,
            city : document.getElementById('cityName').value,
            pincode : document.getElementById("zip").value,
            address1 : document.getElementById('addressLine1').value,
            address2 : document.getElementById('addressLine2').value,
            phone : document.getElementById('phone').value,

        };
        addressDataLS.push(address);
        localStorage.setItem('addressData', JSON.stringify(addressDataLS));
        window.location.href="payment.html"

    }
</script>