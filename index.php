<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    data = { first_name : "test2", role_id:"2",last_name:"test",email:"test2@test.com",password:"password", create_dat: "2023-02-01",update_dat:"2023-02-01"};
    let url = 'http://localhost:8001/users';
    let option = {
        method: "GET"/*
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
        },
      */};
    fetch(url,option)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data)
    }) 
    /*
    let url='http://localhost:8001/invoice/5'
    fetch(url,{method:"GET"}) 
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data)
    }) 
    */
    </script>
</body>
</html>