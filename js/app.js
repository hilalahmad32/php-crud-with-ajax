$(document).ready(function () {

    // select data from database

    const loadData = (page) => {
        $.ajax({
            url: "php/load-data.php",
            type: "GET",
            data:{page:page},
            success: (data) => {
                $("#load-data").html(data);
            }
        })
    }

    loadData();

    $(document).on("click",".pagination a",function(e){
        e.preventDefault();
        const id=$(this).data("id");
        loadData(id);
    })

    // total count of data

    const totalCount = () => {
        $.ajax({
            url: "php/total-count.php",
            type: "GET",
            success:(data) => {
                $("#total-count").html(data);
            }
        })
    }
    totalCount();
    // insert data into database
    $("#save").on("click", function () {
        const name = $("#username").val();
        const age = $("#age").val();
        const country = $("#country").val();

        if (name == "" || age == "" || country == "") {
            alert("Please Fill All The Field");
            // leater we will print pretty message
        } else {
            // this is ajax request
            $.ajax({
                url: "php/insert-data.php",
                type: "POST",
                data: { name: name, age: age, country: country },
                success: (data) => {
                    if (data == 1) { // this 1 come from the server side
                        alert("Data Add Successfully");
                        $("#form-data").trigger("reset");
                        $("#addStudent").modal("hide");
                        loadData();
                        totalCount();
                    } else {
                        alert("Something Woring");
                    }
                }
            })
        }
    });

    // edit data 
    $(document).on("click", "#edit", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "php/edit-data.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                $("#edit-data").html(data);
            }
        });
    });

    // update data
    $("#update").on("click", function () {
        const id = $("#edit_id").val();
        const name = $("#edit_username").val();
        const age = $("#edit_age").val();
        const country = $("#edit_country").val();
        if (name == "" || age == "" || country == "") {
            alert("Please Fill the field");
        } else {
            $.ajax({
                url: "php/update-data.php",
                type: "POST",
                data: { id: id, name: name, age: age, country: country },
                success: (data) => {
                    if (data == 1) {
                        alert("data update succesfully");
                        $("#update-data").trigger("reset");
                        $("#editStudent").modal("hide");
                        totalCount();
                        loadData();
                    } else {
                        alert("Something woring");
                    }
                }
            })
        }
    });

    $(document).on("click", "#delete", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "php/delete-data.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                if (data == 1) {
                    alert("data delete successfully");
                    totalCount();
                    loadData();
                } else {
                    alert("something woring");
                }
            }
        })
    });

    $("#search").on("keyup",function(){
        const search=$(this).val();
        $.ajax({
            url:"php/search-data.php",
            type:"POST",
            data:{search:search},
            success:(data)=>{
                $("#load-data").html(data);
            }
        })
    })
})