<html> 
    <head>
        <body>
        <div>    
        <form action="{{route('colours.store')}}" method="post">
            {{ csrf_field() }}
            <div>
            <label>Colours </label>
            <select name="colour_name[]" id="some-select" multiple="multiple">
                <option>Black</option>
                <option>White</option>
                <option>Other</option>
            </select>
            </div>
            <div>
                <label for="test">Test</label>
                <input type="text" name="test">
            </div>
            <input type="submit" value="Submit">
        </form>
        </div>
        </body>
    </head>
</html>