<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>todolist</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    todo list
                </td>
            </tr>
        </table>
        <div><input type="button" name="listadd" id="listadd" value="Add"> / <input type="button" name="listdel" id="listdel" value="remove"></div>
        <table>
            <tr>
                <td>
                    <input type="checkbox" name="allchk" id="allchk">
                </td>
                <td>
                  no.
                </td>
                <td>
                  title
                </td>
                <td>
                  등록일
                </td>
                <td>
                  진척도
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="checkB[]" value="11111">
                </td>
                <td>
                    1
                </td>
                <td>
                    todo list sample 1
                </td>
                <td>
                    2020-03-22
                </td>
                <td>
                    20%(진행중)
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="checkB[]" value="22222">
                </td>
                <td>
                    2
                </td>
                <td>
                    todo list sample 2
                </td>
                <td>
                    2020-03-22
                </td>
                <td>
                    30%(진행중)
                </td>
            </tr>
        </table>
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

        </script>
    </body>
</html>
