<!DOCTYPE html>
<html>
<head>
    <title>Developer's Best Friend</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css" type="text/css">

</head>
<body>
<h1>
    A Developer's Wonderful Friend!
</h1>
<h2>
    Lorem Ipsum Generator:
</h2>
<div class="sideColumns">
    <ol>
        <li>
            Select how many paragraphs you would like to be generated (the maximum allowed is 99 paragraphs).
        </li>
        <li>
            Click "Generate Text" and you will receive your text.
        </li>
    </ol>
    <form>// method='POST' action='index.php'>
        <p class="inputHeaders"> How many paragraphs would you like? (Maximum: 99)</p>
        <input type="text" name="numberOfParagraphs"><br>
        <input type='submit' value='Generate Text' id="generateTextButton"><br>
    </form>
    <p>Here are your paragraphs:</p>

    <h2>
        Random User Generator:
    </h2>
    <ol>
        <li>
            Select how many Users you would like to be generated (the maximum allowed is 99 Users).
        </li>
        <li>
            Click "Generate Users" and you will receive your list.
        </li>
    </ol>
    <form>// method='POST' action='index.php'>
        <p class="inputHeaders"> How many paragraphs would you like? (Maximum: 99)</p>
        <input type="text" name="numberOfUsers"><br>
        <input type="checkbox" name="birthday" value="true" id="birthday"><label for="birthday">Would you like to include a birthday?</label><br>
        <input type="checkbox" name="profile" value="true" id="profile"><label for="profile">Would you like to include a profile?</label><br>
        <input type='submit' value='Generate Users' id="generateUsersButton"><br>
    </form>

    <p>Here are your Users:</p>

</div>

<div id="bottom">

    <img src={{URL::asset('/images/Users.png')}} alt='Users image' />
</div>
</body>
</html>
