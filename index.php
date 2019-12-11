<?php
require_once 'header.php';
?>
<body id="LoginForm">
    <div class="container">
        <h1 class="form-heading text-center mt-2">CALCULATOR</h1>

        <div class="login-form">
            <div class="main-div">

                <form action="result.php" method="post">

                    <div class="form-group">
                        <h5>First Number</h5>
                        <input type="number" class="form-control" placeholder="enter first number" name="num1" required>
                    </div>
                    <div class="form-group">
                        <h5>Second Number</h5>
                        <input type="number" class="form-control mb-4" placeholder="enter second number" name="num2"
                            required>
                    </div>

                    <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="add">ADD</button>
                    <button type="submit" class="btn btn-outline-info btn-lg btn-block" name="sub">SUB</button>
                    <button type="submit" class="btn btn-outline-success btn-lg btn-block" name="mul">MUL</button>
                    <button type="submit" class="btn btn-outline-warning btn-lg btn-block" name="div">DIV</button>

                </form>
            </div>
        </div>
    </div>
    </div>
</body>

<?php
require_once 'footer.php';
?>