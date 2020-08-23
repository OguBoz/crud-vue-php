<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | VUE | PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div id="app">
        <div class="container">
             <div class="row mt-4">
                <div class="col-md-8 mx-auto">
                <a data-toggle="modal" data-target="#addContact" class="btn btn-sm btn-primary text-white m-3">Add Contact</a>
                    <div class="card border-primary">
                        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody v-for="(contact,index) in contacts">
                    <tr :key="index">
                        <td>
                            {{contact.name}}
                        </td>
                        <td>
                            {{contact.tel}}
                        </td>
                        <td>
                            <a @click="getContact(contact.id)" data-toggle="modal" data-target="#updateContact" class="btn btn-sm btn-warning m-3">Update</a>
                            <a @click="deleteContact(contact.id)" data-toggle="modal" data-target="#deleteContact" class="btn btn-sm btn-danger m-3">Delete</a>
                        </td>
                    </tr>
                </tbody>
             </table>         
                        </div>
                    </div>
                </div>
             </div>
        
        </div>
<div class="modal" tabindex="-1" role="dialog" id="addContact">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <input type="text" class="form-control" id="name" v-model="contact.name" placeholder="Enter name...">
            </div>
            <div class="form-group">
                <input type="tel" id="tel" class="form-control" v-model="contact.tel" placeholder="Enter phone...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" id="addContactBtn" v-on:click="addContact()">Add Contact</button>
            </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="updateContact">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <input type="text" class="form-control" v-model="contact.name" placeholder="Enter name...">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" v-model="contact.tel" placeholder="Enter phone...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" id="addContactBtn" v-on:click="updateContact()">Update Contact</button>
            </div>
      </div>
    </div>
  </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="js/main.js"></script>
</body>
</html>