$(document).ready(function (){

    $("#createCategory").on("click" , function(){

       let category = $("#category").val();

         $.ajax({

             url: "/api/create/category",
             method: "post" ,
             dataType : "json" ,
             data : {category : category},
             success: function (data){
                 if(data.message){

                     document.getElementById("success").innerHTML =`
                            <div class="alert alert-success" role="alert">
                                ${data.message}
                            </div>
                      `;
                 }else if(data.messageError){

                     document.getElementById("success").innerHTML =`
                            <div class="alert alert-danger" role="alert">
                                ${data.messageError}
                            </div>
                      `;
                 }

                 $("#category").val("");
             },
             error: function (error, xhr , status){
                 console.log("error");
             }
         })



    })

    function search(dates){
        var html = ``;
        dates.forEach(e => {
            html += `  <div class="card mt-3 ms-3" >
                    <a href="show/post/${e.id}">
                    <img class="card-img-top" src="../blogImage/${e.image}" alt="${e.title}">
                    </a>
                    <div class="card-body">
                        <h6 class="card-text text-center"> ${e.title}</h6>
                        <hr>
                        <p class="card-text  text-center">Created by : ${e.user}</p>
                    </div>
                </div>`;
        });

        document.getElementById("forSearch").innerHTML = html;
    }



    $("#search").blur(function(){
        if($(this).val() != ""){
            let text = $(this).val();
            console.log(text);
            $.ajax({

                url: "/api/search/text",
                method: "post" ,
                dataType : "json" ,
                data : {text : text},
                success: function (dates){

                  search(dates.data);
                },
                error: function (error, xhr , status){
                    console.log("error");
                }
            })
        }

    })

    $(".searchCategory").click(function (e){
        e.preventDefault();
       let category =  $(this).children("span").text();
        $.ajax({

            url: "/api/search/category",
            method: "post" ,
            dataType : "json" ,
            data : {category : category},
            success: function (values){

                search(values.data);
            },
            error: function (error, xhr , status){
                console.log("error");
            }
        })
    })

})
