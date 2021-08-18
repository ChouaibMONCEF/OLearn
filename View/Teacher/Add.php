<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form id="form" method="POST" action="http://localhost/OLearn/teacher/add" enctype="multipart/form-data">
            <div id="sone" >
                <div>
                    <div>
                        <label>Enter a valid YouTube link </label> <br>
                        <input type="texr" name="video">
                    </div>
                    <div>
                        <label>Title :</label> <br>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label>Description :</label> <br>
                        <textarea type="text" name="dscr"></textarea>
                    </div>
                    <div>
                        <label>Grade :</label> <br>
                        <select name="grade" >
                        <option value="5eme">5eme</option>
                        <option value="1bac">1bac</option>
                        <option value="2bac">2bac</option>
                        </select>
                    </div>
                    <div>
                        <label>Subject :</label> <br>
                        <select name="subject" >
                        <option>Mathematiques</option>
                        <option>Physics</option>
                        <option>Svt</option>
                        <option>Philosophy</option>
                        <option>Traduction</option>
                        <option>French</option>
                        <option>English</option>
                        <option>Arabe</option>
                        </select>
                    </div>
                    <div>
                        <label>Thumbnail :</label> <br>
                        <input type="file" name="thumbnail" >
                    </div>
                    <button id="btn" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>