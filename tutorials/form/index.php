<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .error{
      color: red;
    }
  </style>
  <body>
    
    <div class="container">
      <div class="error">

      </div>
        <form id="myForm">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3 col-12">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      const myForm = document.querySelector('#myForm');
      const errorBox = document.querySelector('.error');
      myForm.addEventListener('submit', async (e)=>{
        let formData = new FormData(myForm);
        // console.log(Array.from(formData));
        // console.log(...formData);
        e.preventDefault();
        let response = await fetch('./submit.php', {
          method: 'post',
          body: formData,
        })
        if(!response.ok){
          console.log('something went wrong');
        }
        let resText = await response.text();
        console.log(resText);
        errorBox.innerHTML = resText;
      })
    </script>
  </body>
</html>