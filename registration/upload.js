/**
 * Created by remi on 17/01/15.
 */
(function () {

    var uploadfiles = document.querySelector('#uploadfiles');
    
    uploadfiles.addEventListener('change', function () {
        
        //Check key code 1 - at Begin
        var code = document.getElementById("code").value;
        if(code.slice(0,3) != "S18"){
            console.log("invalid key 1");
            alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
            return;
        }
        
        //Check key code 2 - at End
        var test = code.slice(code.length-4,code.length)
        console.log(test)
        
        switch(test)
        {
            case "AWOR":
            case "ATUT":
            case "AUPC":
            case "AUNM":
            case "AUMB":
            case "ASNM":
            case "ASMB":
            case "ARMB":
            case "APCM":
            case "AFNM":
            case "AFMB":
            case "A1DP":
                console.log("code OK");
                console.log(code);
                break;
            default:
                console.log("invalid key 2");
                alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
                return;
          }
          
        //Key code verified - upload file
        var files = this.files;
        for(var i=0; i<files.length; i++)
        {
            code = document.getElementById("code").value;
            //var article = document.getElementById("articleid").value;
            
            uploadFile(this.files[i], code, "");
        }

    }, false); 


    /**
     * Upload a filez
     * @param file
     */
    function uploadFile(file, var1, var2){
        var url = "saveFiles.php";
        var xhr = new XMLHttpRequest();
        var fd = new FormData();
        xhr.open("POST", url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Every thing ok, file uploaded
                console.log(xhr.responseText); // handle response.
            }
        };
        fd.append('uploaded_file', file);
        fd.append('code', var1);
        //fd.append('article', var2);
        
        alert("File sent successfully. Thank you.");
        console.log("file sent...");
        //console.log(var2);
        
        xhr.send(fd);
    }
}());