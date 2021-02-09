<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
</head>

<body>
    <style>
        .error {
            display: block;
        }
    </style>

    <script src="script.js"></script>

    <section>
        <article>
            <div class="name" id="name_test">
                <label for="name_input">Name</label>
                <input type="text" id="name_input">
            </div>
        </article>
    </section>
    <script>
        const div_name = document.getElementById('name_test'),
            input = document.getElementById('name_input'),
            span = document.createElement('span'),
            br = document.createElement('br');
        span.classList.toggle('error')
        span.append('test');
        input.addEventListener('keyup', () => {
            if (input.value === '') {
                div_name.append(span)
            } else {
                div_name.removeChild(span)
            }
        });


        ;
    </script>
</body>

</html>