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
    data = { name: "Raviga", type_id:"1",country:"United States",tva:"US456 654 321",create_dat: "2023-02-21T09:22:26.195Z"};
    let url = 'https://quentin.hugoorickx.tech/companies';
    let option = {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
        },
      };
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