<?php
    // checkt of er gesubmit is
    if (isset($_POST['submit'])) {

        $messageEN = $_POST['messageEN'];
        $messageNL = $_POST['messageNL'];

        // slaat de info van de file op in de $file variabele (de input in gallerij.php heeft de name "file" )
        $file = $_FILES['file'];

        // zet de waarden van de file zoals de name, type etc in variabelen.
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        // splitst de file name in twee delen: de naam en de extensie
        $fileNameSplit = explode('.', $fileName);
        $fileExt = strtolower(end($fileNameSplit));

        // array van verschillende extensies die gebruikt mogen worden
        $allowed = array('jpg', 'jpeg', 'png');

        $validated = imageFileExtCheck($fileExt);
        if($validated === true){
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: home.php");
            exit;
        }

        /**
         * TODO :
         * Post Error
         */

    }

    /**
     * checkt of de file extensie in de array zit,
     * daarna of er geen errors zijn en daarna of het bestand klein genoeg is.
     * Alles correct? > de file verplaatst naar de assets map
     * */
    function imageFileExtCheck($fileExt){
        if (in_array($fileExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    return true;
                } else {
                    return "Je bestand is te groot";
                }
            } else {
                return "Er ging iets fout bij het uploaden van je bestand";
            }
        } else {
            return "Upload een jpg, jpeg of png file";
        }
    }
?>