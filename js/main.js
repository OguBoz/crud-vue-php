new Vue({
    el: '#app',
    data: {
        contact: {
            name : '',
            tel : '',
            id : ''
        },
        contacts : []
    },
    created() {
        this.getContacts();
    },
    methods : {
        getContacts() {
            axios.get("http://localhost/crud-vue-php/get_contacts.php")
                .then(response => { 
                    console.log(response.data);
                    this.contacts = response.data;
                })
                .catch(err => console.log(err))
        },
        addContact() {
            axios.post("http://localhost/crud-vue-php/add_contact.php", {name:this.contact.name, tel:this.contact.tel})
                .then(response => { 
                    console.log(response.data)
                    this.contacts.push(response.data)
                    this.contact = {name :'', tel : ''}
                    $("#addContact").modal('hide');
                    Swal.fire({
                        type : 'success',
                        title : 'Added',
                        text : 'Contact Added'
                    })
                    })
                .catch(err => console.log(err))
        },
        updateContact() {
            axios.post("http://localhost/crud-vue-php/update_contact.php", {name:this.contact.name, tel:this.contact.tel, id: this.contact.id})
                .then(response => { 
                    console.log(response.data)
                    this.contact = {name :'', tel : ''}
                    $("#updateContact").modal('hide');
                    Swal.fire({
                        type : 'success',
                        title : 'Updated',
                        text : 'Contact Updated'
                    });
                    this.getContacts();
                    })
                .catch(err => console.log(err))
        },
        deleteContact(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                    axios.delete("http://localhost/crud-vue-php/get_contact.php?id=" + id)
                        .then(response => {
                            this.contacts = this.contacts.filter(contact => {
                                return contact.id !== id
                            })
                        })
                  Swal.fire(
                    'Deleted!',
                    'Your Contact has been deleted.',
                    'success'
                  )
                }
              })
        },
        getContact(id) {
            axios.get("http://localhost/crud-vue-php/get_contact.php?id=" + id)
            .then(response => { 
                this.contact = response.data;
            })
            .catch(err => console.log(err))

        }
    }
});