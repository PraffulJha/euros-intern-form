var counter = 0;

            function moredash() {
                counter++;
                var newFields = document.getElementById("dash").cloneNode(true);
                newFields.id = '';
                newFields.style.display = 'block';
                var newField = newFields.childNodes;
                for (var i=0;i<newField.length;i++) {
                    var theName = newField[i].name;
                    if (theName)
                        newField[i].name = theName + counter;
                }
                var insertHere = document.getElementById("writediv");
                insertHere.parentNode.insertBefore(newFields,insertHere);
            }

            window.onload = moredash;
