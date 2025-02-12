<?php
/* Smarty version 4.2.1, created on 2023-11-22 15:37:20
  from 'W:\domains\nixminsk.os\core\tpl\admin\apps\appImageBrowser.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_655df60026dad3_54125971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0050ce87a346e20ecf1cce845a26493a785a5ae' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\appImageBrowser.tpl.html',
      1 => 1698663856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655df60026dad3_54125971 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
                        <div class="modal-header">
                <h1 class="modal-title fs-5" id="myModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                        <div class="modal-body">
                <div class="row mb-1 align-items-end">
                    <div class="col">
                        <div id="gallery_modal" class="p-4 align-middle gallery"></div>
                    </div>
                </div>
            </div>
                        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

// const fileUploaders = document.querySelectorAll( 'input[type='file'].myUploader' )
const validImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/bmp'];


async function doAdminAjax(ajaxurl, reqData, reqType, reqMode) {
    if (typeof reqType == 'undefined') reqType = 'GET'
    if (typeof reqMode == 'undefined') reqMode = 'cors'
    let result
    try {
        result = await $.ajax({
            url: ajaxurl,
            type: reqType,
            data: reqData,
            mode: reqMode
        })
        // console.log(result)
        return result
    } catch (error) {
        console.error("doMyAjax", error)
    }
}


async function jsSetValue(filename, dataID) {
    let url = 'admin.php?app=app_image_browser&operation=set_image_as_value'
    let ask = {
        'set_image_as_value': 1,
        'ajax_save': 1,
        'dataID': dataID,
        'dataValue': filename,
    }
    let ajaxAnswer = await doAdminAjax(url, ask, reqType = 'POST')

    console.log(ajaxAnswer)

    if (ajaxAnswer && ajaxAnswer.success) {
        processModalAnswer(ajaxAnswer, dataID)
    } else {
        processModalError(ajaxAnswer, dataID)
    }
}

async function jsClearValue(dataID) {
    let url = 'admin.php?app=app_image_browser&operation=clear_value'
    let ask = {
        'set_image_as_value': 1,
        'ajax_save': 1,
        'dataID': dataID,
        'dataValue': "0",
    }
    let ajaxAnswer = await doAdminAjax(url, ask, reqType = 'POST')

    console.log(ajaxAnswer)

    if (ajaxAnswer && ajaxAnswer.success) {
        processModalAnswer(ajaxAnswer, dataID)
    } else {
        processModalError(ajaxAnswer, dataID)
    }
}

function processModalAnswer(answer, dataID) {
    let dataid_clause = `[dataid="${dataID}"]`
    let myTableInfo = document.querySelectorAll('div.tableinfo' + dataid_clause)[0]
    let myThumb = document.querySelectorAll('img.img-thumbnail' + dataid_clause)[0]
    let myNoThumb = document.querySelectorAll('svg.img-thumbnail' + dataid_clause)[0]
    console.log(typeof dataid_clause, dataid_clause, myNoThumb)
    if (answer.success && answer.success != 'Значение сброшено' && !answer.error) {
        if (myThumb) {
            myThumb.classList.remove('d-none')
        }
        if (myNoThumb) {
            myNoThumb.classList.remove('d-block')
            myNoThumb.classList.add('d-none')
        }
        myThumb.src = answer.newValue
    } else {

        if (myThumb) {
            myThumb.classList.add('d-none')
        }
        if (myNoThumb) {
            myNoThumb.classList.remove('d-none')
            myNoThumb.classList.add('d-block')
        }
    }
    myTableInfo.innerHTML = '<span class="badge bg-success text-wrap">' + answer.success + '</span>'
}

function processModalError(answer, dataID) {
    let myTableInfo = document.querySelectorAll('div.tableinfo[dataID="' + dataID + '"]')[0]
    console.log(answer.error)
    myTableInfo.innerHTML = '<span class="badge bg-danger text-wrap">' + answer.error + '</span>'
}

async function getGalleryHtml(url, data) {
    let ajaxurl = url
    let reqData = data
    let ajaxAnswer = await doAdminAjax(ajaxurl, reqData, reqType = 'POST')
    // console.log("ajaxAnswer", ajaxAnswer)
    if (ajaxAnswer) {
        return drawGallery(ajaxAnswer)
    } else {
        return false
    }
}

const myModal = document.getElementById('myModal')
// const myConfirm = document.getElementsByClassName('.myConfirm')

function drawGallery(ajaxAnswer) {
    let myGallery = document.querySelectorAll('div#gallery_modal')[0]
    myGallery.innerHTML = ajaxAnswer
}

myModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    //
    const dataID = button.getAttribute('data-bs-whatever')
    const dataName = button.getAttribute('dataName')
    const dataValue = button.getAttribute('dataValue')
    const dataSubfolder = button.getAttribute('dataSubfolder')
    // console.log(dataID, dataName, dataValue)
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    const modalTitle = myModal.querySelector('.modal-title')
    modalTitle.textContent = `Выберите картинку`
    let idElements = document.querySelectorAll('div.modal *[dataID]')
    Array.prototype.slice.call(idElements).forEach(function(el) {
        el.attributes.dataid.value = dataID
    })
    console.log(idElements)
    let myGallery = document.querySelectorAll('div#gallery_modal[dataID="' + dataID + '"]')[0]
    let myThumb = document.querySelectorAll('img#thumbnail_modal[dataID="' + dataID + '"]')[0]

    let url = 'admin.php?app=app_image_browser&operation=get_images_in_folder'
    let ask = {
        'get_images_in_subfolder': 1,
        'dataID': dataID,
        'dataName': dataName,
        'dataValue': dataValue,
        'dataSubfolder': dataSubfolder,
    }
    getGalleryHtml(url, ask)
})

//////////////////////////// dropareas /////////////////////////////////////////////////////////////////////////////
let dropAreas = document.querySelectorAll('div.myDroparea[dataID]')
Array.prototype.slice.call(dropAreas).forEach(function(diva) {
    // Prevent default drag behaviors
    let dataID = diva.attributes.dataID.value;
    let constantName = diva.attributes.constantName.value
    let uploadProgress = []
    let dropArea = document.querySelectorAll('div.myDroparea[dataID="' + dataID + '"]')[0]
    let progressBar = document.querySelectorAll('div.progress-bar[dataID="' + dataID + '"]')[0]
    let subfolderSelector = document.querySelectorAll('select.form-select[dataID="' + dataID + '"]')[0]
    let myGallery = document.querySelectorAll('div.gallery[dataID="' + dataID + '"]')[0]
    let myThumb = document.querySelectorAll('img.img-thumbnail[dataID="' + dataID + '"]')[0]


    ;
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false)
        document.body.addEventListener(eventName, preventDefaults, false)
    })
    // Highlight drop area when item is dragged over it
    ;
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false)
    });
    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false)
    })
    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false)

    function preventDefaults(e) {
        e.preventDefault()
        e.stopPropagation()
    }

    function highlight(e) {
        dropArea.classList.add('bg-success')
        dropArea.classList.add('opacity-75')
    }

    function unhighlight(e) {
        dropArea.classList.remove('bg-success')
        dropArea.classList.remove('opacity-75')
    }

    function handleDrop(e) {
        var dt = e.dataTransfer
        var files = dt.files
        handleFiles(files)
    }

    function initializeProgress(numFiles) {
        progressBar.value = 0
        uploadProgress = []
        for (let i = numFiles; i > 0; i--) {
            uploadProgress.push(0)
        }
    }

    function updateProgress(fileNumber, percent) {
        uploadProgress[fileNumber] = percent
        let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
        progressBar.value = total
    }

    function handleFiles(files) {
        files = [...files]
        initializeProgress(files.length)
        files.forEach(uploadFile)
        files.forEach(previewFile)
    }

    function previewFile(file) {
        const fileType = file['type'];
        if (!validImageTypes.includes(fileType)) {
            // invalid file type code goes here.
            let message = { error: 'not valid file. dropped' }
            processError(message)
            return false;
        }

        let reader = new FileReader()
        reader.readAsDataURL(file)

        console.log(file, file.type)
        // console.log(reader)

        reader.onloadend = function() {
            let img = document.createElement('img')
            img.classList.add('img-thumbnail')
            img.style.width = '32px'
            img.style.height = '32px'
            img.src = reader.result
            myThumb.src = reader.result
            myGallery.appendChild(img)
        }
    }

    function uploadFile(file, i) {
        const fileType = file['type'];
        if (!validImageTypes.includes(fileType)) {
            // invalid file type code goes here.
            let message = { error: 'not valid file. dropped' }
            processError(message)
            return false;
        }

        // var url = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload'
        var url = 'admin.php?app=app_image_browser&operation=upload_image_file'
        var xhr = new XMLHttpRequest()
        var formData = new FormData()

        subfolder = subfolderSelector.value;

        formData.append('upload_preset', 'ujpu6gyk')
        formData.append('upload_image_file', 1)
        formData.append('ajax_save', 1)
        formData.append('dataID', dataID)
        formData.append('dataName', constantName)
        formData.append('dataSubfolder', subfolder)
        formData.append('file', file)

        xhr.open('POST', url, true)
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')
        // Update progress (can be used to show progress indicator)
        xhr.upload.addEventListener('progress', function(e) {
            updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
        })
        xhr.addEventListener('readystatechange', function(e) {
            if (xhr.readyState == 4 && xhr.status == 200) {
                updateProgress(i, 100) // <- Add this
                answer = JSON.parse(e.target.responseText);
                processAnswer(answer)
            } else if (xhr.readyState == 4 && xhr.status != 200) {
                // Error. Inform the user
                console.error(xhr.responseText)
                answer = JSON.parse(xhr.responseText);
                processError(answer)
            }
        })
        xhr.send(formData)
    }

    function processAnswer(answer) {
        let myTableInfo = document.querySelectorAll('div.tableinfo[dataID="' + dataID + '"]')[0]
        console.log(myTableInfo)
        myTableInfo.innerHTML = '<span class="badge bg-success text-wrap">' + answer.success + '</span>'
    }

    function processError(answer) {
        let myTableInfo = document.querySelectorAll('div.tableinfo[dataID="' + dataID + '"]')[0]
        console.log(answer.error)
        myTableInfo.innerHTML = '<span class="badge bg-danger text-wrap">' + answer.error + '</span>'
    }

})





<?php echo '</script'; ?>
>
<?php }
}
