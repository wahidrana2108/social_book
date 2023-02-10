<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Social Book</title>
    <style>
        /* Styling for the form */
        .form-container {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
        }
        form {
          display: flex;
          flex-direction: column;
          align-items: center;
          background-color: white;
          padding: 1rem;
          border-radius: 5px;
          box-shadow: 0 0 10px lightgray;
        }
        form h2 {
          margin-bottom: 1rem;
        }
        form input[type="text"],
        form input[type="password"] {
          padding: 0.5rem;
          margin-bottom: 1rem;
          border-radius: 5px;
          border: none;
          border: 1px solid lightgray;
          width: 200px;
        }
        form input[type="submit"] {
          padding: 0.5rem 1rem;
          background-color: dodgerblue;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
        form input[type="submit"]:hover {
          background-color: royalblue;
        }
        /* Style for error messages */
        .error {
          color: red;
          font-size: 0.8rem;
          margin-top: 0.5rem;
        }
      </style>
</head>
<body>
    <div class="form-container">
        <form>
          <h2>Login</h2>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <input type="submit" value="Submit" />
          <div class="error" id="error"></div>
        </form>
      </div>
    

    <!-- script start -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- script end -->
    <script>
        const form = document.querySelector("form");
        const errorMessage = document.querySelector("#error");
  
        form.addEventListener("submit", (event) => {
          event.preventDefault();
          const username = document.querySelector("#username").value;
          const password = document.querySelector("#password").value;
  
          if (username === "admin" && password === "password") {
            errorMessage.textContent = "";
            // redirect to the dashboard
          } else {
            errorMessage.textContent = "Incorrect username or password.";
          }
        });
      </script>

</body>
</html>