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
                    

                    RegNum = targetElement.closest('tr').querySelector('td.RegNum')
                    Make = targetElement.closest('tr').querySelector('td.Make')
                    Model = targetElement.closest('tr').querySelector('td.Model')
                    Tank = targetElement.closest('tr').querySelector('td.TankCap')
                    Prev = targetElement.closest('tr').querySelector('td.PrevOwner')
                    Branch = targetElement.closest('tr').querySelector('td.Branch')
                    Depart = targetElement.closest('tr').querySelector('td.Depart')
                    Driver = targetElement.closest('tr').querySelector('td.Driver')
                    Write = targetElement.closest('tr').querySelector('td.Writte')

                    console.log(RegNum,Make,Model,Tank,Prev,Branch,Depart,Driver,Write);

                    BootstrapDialog.confirm({
                        title: 'Update Vehicle Info',
                        message: Make + ' ' + Model + ' ' + RegNum,
                    })
                }
            });
        }
    }
    var script = new script();
    script.initialize();