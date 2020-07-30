var counter = 0;

            function edFields() {
                counter++;
                var newFields = document.getElementById("workexperience").cloneNode(true);
                newFields.id = '';
                newFields.style.display = 'block';
                var newField = newFields.childNodes;
                for (var i=0;i<newField.length;i++) {
                    var theName = newField[i].name;
                    if (theName)
                        newField[i].name = theName + counter;
                }
                var insertHere = document.getElementById("writeexp");
                insertHere.parentNode.insertBefore(newFields,insertHere);
            }

            window.onload = edFields;
