<div class="section section-1">
    <ul>
        <li><a href="../home/index.php">home.</a></li>
        <li><a href="../components/pcComponents.php">pc components.</a></li>
        <li><a href="../accessories/pcAccessories.php">pc accessories.</a></li>
        <li><a href="../product/product.php?title=laptops&category=laptop">laptops.</a></li>
    </ul>
</div>
<div class="dropdownSection">
    <div class="dropdownWrapper">
        <button class="dropdownButton">
            <img src="../pictures/dropdown.png" />
        </button>
        <div class="dropdownOptions">
            <a href="../home/index.php">home</a>
            <a href="../components/pcComponents.php">pc components</a>
            <a href="../accessories/pcAccessories.php">pc accessories</a>
            <a href="../product/product.php?title=laptops&category=laptop">laptops</a>
        </div>
    </div>
</div>
<div class="section section-2">
    <a href="../home/index.php"><img src="../pictures/MrPC_Logo_1000x1000.png" alt="Mr.PC logo" /></a>
</div>
<div class="section section-3">
    <ul>
        <li class="search">
            <img src="../pictures/searchIcon.png" alt="search icon" />
            <span>search</span>
        </li>

        <!-- CART -->
        <li class="cart">
            <a href="../product/cart.php">
                <img src="../pictures/cartIcon.png" alt="cart icon" />
                <div id="tot_ic">0</div>
                <span>cart</span>
            </a>
        </li>

        <li class="account">
            <a href="../login/login.php">
                <img src="../pictures/userIcon.png" alt="account icon" />
                <span>account</span>
            </a>
        </li>
    </ul>
</div>
<script>
    let basket = JSON.parse(localStorage.getItem("data")) || [];
    
    function calculation() {
        let cartIcon = document.getElementById("tot_ic");
        cartIcon.innerHTML = basket.map((x) => x.quantity).reduce((x, y) => x + y, 0);
    }

    calculation();
</script>