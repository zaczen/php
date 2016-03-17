<!DOCTYPE html>
<!--Kandis Brighton-->
<!--IT 305 -->
<!--1/18/2016-->
<!--Pizza Form.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Poppa's Pizza</title>
        <style>
            body{
                margin: 0 200px 0 200px;
                background-color: red;
                font-size:12pt;
            }
            #main {
                background-color:white;
                height: 100%;
                padding: 1em 5em 3em 5em;
            }
            h1 {
                color:darkgreen;
                font-family:arial;
                font-size: 44pt;
            }
            fieldset{
                margin-bottom: 1.5em;
                border-color:darkgreen;
                padding: 1em;
            }
            legend {
                font-weight:bold;
                color:darkgreen;
                font-variant:small-caps;
                font-size: 14pt;
            }
            #submit {
                font-size: 18pt;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
       <div id="main">
        <h1>Welcome to Poppa's Pizza</h1>
        <form id="pizza_form" action= "success.html" method="get">
            <fieldset>
                <legend>Contact Info</legend>        
                <p>
                   First Name: 
                   <input type-"text" id="fname" name="fname" placeholder="First Name">   
                   Last Name: 
                   <input type ="text" id="lname" name="lname" placeholder="Last Name">
                   <br>               
                </p>
                <p>
                   Address: <br>
                   <textarea id="address" name="address" cols="30" rows="5"></textarea>
                </p>   
            </fieldset>
            <fieldset>
                <legend>Choose One</legend>
                <label><input type="radio" value="pickup" name="delivery">Pick-up</label><br>
                <label><input type="radio" value="delivery" name="delivery">Delivery</label><br>
            </fieldset>
          
            <fieldset>
                <legend>Toppings</legend>
                <label><input type="checkbox" name="toppings" value="pepperoni">Pepperoni</label><br>
                <label><input type="checkbox" name="toppings" value="sausage">Sausage</label><br>
                <label><input type="checkbox" name="toppings" value="olives">Olives</label><br>
                <label><input type="checkbox" name="toppings" value="artichokes">Artichokes</label><br>
                <label><input type="checkbox" name="toppings" value="anchovies">Anchovies</label><br>
            </fieldset>
            <fieldset>
                <legend>Crust</legend>
                <label><input type="radio" value="thin" name="crust">Thin</label><br>
                <label><input type="radio" value="thick" name="crust">Thick</label><br>
                <label><input type="radio" value="wheat" name="crust">Wheat</label><br>
                <label><input type="radio" value="glutenfree" name="crust">Gluten-free</label><br>
            </fieldset>
            <fieldset>
              <legend>Select Size</legend>  
              <p>
                <select if="size" name="size">
                    <option value="none">Select a Size</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
              </p>
            </fieldset>
     <!--       <p>
                <input type = "checkbox" id="terms" name="terms">I agree to the terms
            </p> -->
            <p>
                <input type="submit" id="submit" name="btnSubmit" value="Submit your order">
            </p>
        </form>
       </div>
       <?php
       ?>
    </body>
</html>