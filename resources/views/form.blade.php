<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .mx-auto{
            width: 700px;
            background-color: rgb(126, 150, 129)
        }
        .body-form{
            padding: 20px;
            margin-top: 100px;
        }
        .body-create{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="mx-auto" >
        <div class="body-form">
            <form action="{{url('form')}}" method="post">
                  <div class="mb-3">
                    <label for="form" class="form-label">Tên sản phẩm </label>
                    <input type="text" class="form-control" id="form-name" placeholder="Nhập tên sản phẩm... " name="name">
                  </div>
                  <div class="mb-3">
                    <label for="form" class="form-label">Id</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="123456789..."name="id">
                  </div>
                  <div class="mb-3">
                    <label for="form" class="form-label">Nội dung</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nội dung... "name="content">
                  </div>
                  <div class="mb-3">
                    <label for="form" class="form-label">Giá</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="...VND"name='price'>
                  </div>
                  <div class="mb-3">
                    <label for="form" class="form-label">Giảm giá</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="...%"name='sale'>
                  </div>
                  <div class="mb-3">
                    <label for="form" class="form-label">Loại sản phẩm </label>
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option value="1">MacBook</option>
                        <option value="2">Iphone</option>
                        <option value="3">AppleWatch</option>
                        <option value="3">AriPod</option>
                        <option value="3">IPad</option>

                      </select>
                  </div>
                  <div class="body-create">
                    <button type="submit" class="btn btn-success">Add</button>
                  </div>
            </form>
        </div>
       
    </div>
</body>
</html>