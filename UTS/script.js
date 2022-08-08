var emptyRow = "<tr><td colspan='6' class='text-center'> Data is not available</td></tr>";

//CHECK IN

//membuat list muncul di halaman akun =====================================
$(document).ready(function (){
    loadDataFromLocal();

    //setting tombol edit
    $('#luaran').on('click', '.butedit', function(){
        debugger; //1
        const email = $(this).parent().parent().find(".email").html();
        const name = $(this).parent().parent().find(".name").html();
        const position = $(this).parent().parent().find(".position").html();
        const shift = $(this).parent().parent().find(".shift").html();
        const date = $(this).parent().parent().find(".date").html();
        const id = $(this).parent().parent().find(".email").attr("data-id");
        $("#email").val(email);
        $("#name").val(name);
        $("#position").val(position);
        $("#shift").val(shift);
        $("#date").val(date);
        $("#txtId").val(id);
        $("#btnSubmit").text("Update");
    });

    //setting tombol delete
    $("#luaran").on('click', '.butdelete', function(){
        debugger;
        const id = $(this).parent().parent().find(".email").attr("data-id");
        deleteDataFromLocal(id);
    });

    //setting tombol add
    $("#btnSubmit").click(function(){
        debugger; //2
        if ($("#txtId").val() == ''){
            addDataToLocal();
        } else {
            updateDataFromLocal();
          }
    });
    
    //bersihkan form
    $("#btnClear").click(function(){
        clearForm();
    });
});

//bersihkan form ==========================================================
function clearForm(){
    debugger; //6
    $("#email").val("");
    $("#name").val("");
    $("#position").val("Enter Position");
    $("#shift").val("Enter Shift");
    $("#date").val("");
    $("#btnSubmit").val("Submit");
}

//load data kosong ========================================================
function addEmptyRow(){
    debugger; //5
    if($("#luaran tbody").children().children().length == 0){
        $("#luaran tbody").append(emptyRow);
    }
}

//tampilkan data ==========================================================
function loadDataFromLocal(){
    debugger; //4
    let List_Karyawan = localStorage.getItem('List_Karyawan');
    if(List_Karyawan){
        $("#luaran tbody").html("");
        let localArray = JSON.parse(List_Karyawan);
        let index = 1;
        localArray.forEach(element => {
            let dynamicTR = "<tr>";
            dynamicTR = dynamicTR + "<td>" + index + "</td>";
            dynamicTR = dynamicTR + "<td class='email' data-id=" + element.id + ">" + element.email + "</td>";
            dynamicTR = dynamicTR + "<td class='name'>" + element.name + "</td>";
            dynamicTR = dynamicTR + "<td class='position'>" + element.position + "</td>";
            dynamicTR = dynamicTR + "<td class='shift'>" + element.shift + "</td>";
            dynamicTR = dynamicTR + "<td class='date'>" + element.date + "</td>";
            dynamicTR = dynamicTR + "<td class='tdAction text-center'>";
            dynamicTR = dynamicTR + "   <button class='btn btn-sm btn-success butedit' onclick='openForm()'> Edit</button>";
            dynamicTR = dynamicTR + "   <button class='btn btn-sm btn-danger butdelete'> Delete</button>";
            dynamicTR = dynamicTR + "   </td>";
            dynamicTR = dynamicTR + "   </tr>";
            $("#luaran tbody").append(dynamicTR);
            index++;
        });
    }
    addEmptyRow();
}

//tambah data =============================================================
function addDataToLocal(){
  let List_Karyawan = localStorage.getItem('List_Karyawan');
  if(List_Karyawan){
      let localArray = JSON.parse(List_Karyawan);
      const obj = {
          id : localArray.length + 1,
          email : $("#email").val(),
          name : $("#name").val(),
          position : $("#position").val(),
          shift : $("#shift").val(),
          date : $("#date").val()
      };
      localArray.push(obj);
      localStorage.setItem('List_Karyawan', JSON.stringify(localArray));
      loadDataFromLocal();
      let hasil = "Hello, "+ obj.name + ". Your Presence Has Been Recorded!";
        alert(hasil);
  } else {
      const arrayObj = [];
      const obj = {
        id : 1,
        email : $("#email").val(),
        name : $("#name").val(),
        position : $("#position").val(),
        shift : $("#shift").val(),
        date : $("#date").val()
      };
      arrayObj.push(obj);
      localStorage.setItem('List_Karyawan', JSON.stringify(arrayObj));
      loadDataFromLocal();
  }
  clearForm();
}

//update data =============================================================
function updateDataFromLocal() {
    debugger; //3
    let List_Karyawan = localStorage.getItem('List_Karyawan');
    let localArray = JSON.parse(List_Karyawan);
    const oldRecord = localArray.find(m => m.id == $("#txtId").val());
    oldRecord.email = $("#email").val();
    oldRecord.name = $("#name").val();
    oldRecord.position = $("#position").val();
    oldRecord.shift = $("#shift").val();
    oldRecord.date = $("#date").val();
    localStorage.setItem('List_Karyawan', JSON.stringify(localArray));
    loadDataFromLocal();
    clearForm();
  }

//hapus data ==============================================================
function deleteDataFromLocal(id) {
    debugger;
    let List_Karyawan = localStorage.getItem('List_Karyawan');
    let localArray = JSON.parse(List_Karyawan);
    let i = 0;
    while (i < localArray.length) {
      if (localArray[i].id === Number(id)) {
            localArray.splice(i, 1);
      } else {
        ++i;
      }
    }
    localStorage.setItem('List_Karyawan', JSON.stringify(localArray));
    loadDataFromLocal();
  }

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }



//SIGN UP =================================================================
function signup(e){
    event.preventDefault();
    debugger;

    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let pass1 = document.getElementById('password').value;
    let pass2 = document.getElementById('password2').value;

    let pengguna = {
        email:email,
        username: username,
        password1:pass1,
        password2:pass2,
    };

    if(pass2 != pass1){
        document.getElementById('validasi1').innerHTML = "Confirm your password is wrong!";
    }
    if(pass2 == pass1){
        localStorage.setItem(username, JSON.stringify(pengguna));
        alert("Anda telah Terdaftar!");
        document.getElementById('formregis').reset();   
        document.getElementById('validasi1').innerHTML = "";
        location.href = "signin.html";
    }
}

//SIGN IN ==================================================================
function signin(){
    debugger;
    event.preventDefault();
    
    let username = document.getElementById('username_login').value;
    let password = document.getElementById('password_login').value;

    let user = localStorage.getItem(username);
    let data = JSON.parse(user);

    if (user == null) {
        document.getElementById('validasi2').innerHTML = "Your username is wrong!";
    } else if (username == data.username && password == data.password1) {
        let mimin = $("#username_login").val();
        // swal("Sign in berhasil!", "Selamat Datang "+mimin+"!", "success");
        alert("Welcome "+mimin+" to Admin page!");
        location.href = "home2.html";
    } else {
        document.getElementById('validasi2').innerHTML = "Your password is wrong!";
    }
}

//SIGN IN2 ==================================================================
function signin2(){
    debugger;
    event.preventDefault();
    
    let username = document.getElementById('username_login2').value;
    let password = document.getElementById('password_login2').value;

    let user = localStorage.getItem('List_Karyawan', JSON.parse(localArray));
    let data = JSON.parse(user);

    if (user == null) {
        document.getElementById('validasi2').innerHTML = "Your username is wrong!";
    } else if (username == data.username && password == data.password1) {
        let mimin = $("#username_login").val();
        // swal("Sign in berhasil!", " Selamat Datang "+mimin+"!", "success");
        alert("Welcome "+mimin+" to Admin page!");
        location.href = "home2.html";
    } else {
        document.getElementById('validasi2').innerHTML = "Your password is wrong!";
    }
}

//LOGOUT =================================================================
function logout(){
    debugger;
    event.preventDefault();
    
    let keluar = confirm("Sure you want out?");
    if(keluar){
        location.href = "home.html";
        alert("You're out, Good bye!");
    } else{
        location.href = "home2.html";
    }
}
