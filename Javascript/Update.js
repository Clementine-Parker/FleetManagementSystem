function script() {
    this.initialize = function(){
        this.registerEvents();
},
this.registerEvents =   function() {
    document.addEventListener('click',function(e){
        targetElement = e.target;
        classList = targetElement.classList;

        if (classList.contains('Edit')) {
            e.preventDefault();
            
            ID = targetElement.dataset.userid;
            RegNum = targetElement.closest('tr').querySelector('td.RegNum').innerHTML;
            Make = targetElement.closest('tr').querySelector('td.Make').innerHTML;
            Model = targetElement.closest('tr').querySelector('td.Model').innerHTML;
            Tank = targetElement.closest('tr').querySelector('td.TankCap').innerHTML;
            Prev = targetElement.closest('tr').querySelector('td.PrevOwner').innerHTML;
            Branch = targetElement.closest('tr').querySelector('td.Branch').innerHTML;
            Depart = targetElement.closest('tr').querySelector('td.Depart').innerHTML;
            Driver = targetElement.closest('tr').querySelector('td.Driver').innerHTML;
            Write = targetElement.closest('tr').querySelector('td.Write').innerHTML;

            console.log(RegNum,Make,Model,Tank,Prev,Branch,Depart,Driver,Write);

            BootstrapDialog.confirm({
                title: 'Update Vehicle Info',
                message: '<form>\
                <div class="form-group">\
                  <label for="RegNum"> Registration Number </label>\
                  <input type="text" class="form-control" id="RegNum" value="' +RegNum+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Make/Manufacturer </label>\
                  <input type="text" class="form-control" id="Make" value="' +Make+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Model </label>\
                  <input type="text" class="form-control" id="Model" value="' +Model+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Tank Capacity </label>\
                  <input type="text" class="form-control" id="Tank" value="' +Tank+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Previous Owner </label>\
                  <input type="text" class="form-control" id="Prev" value="' +Prev+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Designated Branch </label>\
                  <input type="text" class="form-control" id="Branch" value="' +Branch+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Department </label>\
                  <input type="text" class="form-control" id="Depart" value="' +Depart+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Driver </label>\
                  <input type="text" class="form-control" id="Driver" value="' +Driver+'">\
                  </div>\
                  <div class="form-group">\
                  <label for="RegNum"> Write Off (Yes/No) </label>\
                  <input type="text" class="form-control" id="Write" value="' +Write+'">\
                  </div>\
                  </form>',
                  callback: function (isUpdate) {
                    if (isUpdate){
                        $.ajax({
                            method: 'POST',
                            data: {
                                vehicleId: ID,
                                regnum: document.getElementById('RegNum').value,
                                make: document.getElementById('Make').value,
                                model: document.getElementById('Model').value,
                                tank: document.getElementById('Tank').value,
                                prev: document.getElementById('Prev').value,
                                branch: document.getElementById('Branch').value,
                                depart: document.getElementById('Depart').value,
                                driver: document.getElementById('Driver').value,
                                write: document.getElementById('Write').value,
                            },
                            url: 'database/update.php',
                            dataType: 'json',
                            success: function (data) {
                                if (data.success) {
                                    BootstrapDialog.alert({
                                        type: BootstrapDialog.TYPE_SUCCESS,
                                        message: data.message,
                                        callback: function () {
                                            location.reload();
                                        }
                                    });
                                } else 
                                BootstrapDialog.alert({
                                        type: BootstrapDialog.TYPE_DANGER,
                                        message: data.message,
                                        callback: function () {
                                        location.reload();
                                        }
                                    });
                            }
                        });
                    }
                  }
            });
        }
    });
}
}
var script = new script();
script.initialize();