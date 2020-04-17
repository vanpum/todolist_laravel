<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>todolist</title>
    </head>
    <body>
        <div id=""></div>
        <div>페이징 들어갈 자리</div>
        <script type="text/javascript">
            
            function checkall(e){
                var elechk = document.querySelectorAll("input[name^='checkB']");
                for(var i=0 ; i < elechk.length ; i++){
                    elechk[i].checked = e.target.checked;
                }
            }
            document.querySelector("#allchk").addEventListener("click", checkall)

            function addList(e){
                alert("addList");
            }
            document.querySelector("#listadd").addEventListener("click", addList)

            function removeList(e){
                var elechk = document.querySelectorAll("input[name^='checkB']:checked");
                var delUidArray = [];
                for(var i=0 ; i<elechk.length ; i++){
                    delUidArray.push(elechk[i].value);
                }
                console.log(delUidArray);
            }
            document.querySelector("#listdel").addEventListener("click", removeList)
            function test(){
                var av = "ddddd";
            }

        </script>
    </body>
</html>
