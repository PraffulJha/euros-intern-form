var counter = 0;

            function expFields() {
                counter++;
                var newFields = document.getElementById("education").cloneNode(true);
                newFields.id = '';
                newFields.style.display = 'block';
                var newField = newFields.childNodes;
                for (var i=0;i<newField.length;i++) {
                    var theName = newField[i].name;
                    if (theName)
                        newField[i].name = theName + counter;
                }
                var insertHere = document.getElementById("writeedu");
                insertHere.parentNode.insertBefore(newFields,insertHere);
            }

            window.onload = expFields;
