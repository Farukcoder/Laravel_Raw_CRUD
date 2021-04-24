function send_data() {
  var my_name = document.getElementById('my_name').value;
  var my_roll = document.getElementById('my_roll').value;
  var my_class = document.getElementById('my_class').value;
  var my_section = document.getElementById('my_section').value;

  var url = "/InsertData";
  var data = { name: my_name, roll: my_roll, class: my_class, section: my_section };

  axios.post(url, data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert(error);
    });
}

function delete_data() {
  var my_id = document.getElementById('my_id').value;
  var url = "/DeleteData";
  var data = { id: my_id };

  axios.post(url, data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert(error);
    });

}

function update_data() {

  var my_id = document.getElementById('my_id').value;
  var my_name = document.getElementById('my_name').value;
  var my_roll = document.getElementById('my_roll').value;
  var my_class = document.getElementById('my_class').value;
  var my_section = document.getElementById('my_section').value;

  var url = "/UpdatetData";
  var data = { name: my_name, roll: my_roll, class: my_class, section: my_section, id: my_id };

  axios.post(url, data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert(error);
    });
}