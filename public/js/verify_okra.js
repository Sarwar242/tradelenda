
    function findInfo(e){
        var bvn =e.target.value;
        // console.log(e.target);
        $.get("/kyc/personal/bvn",
        data = {
            bvn: bvn
        },
        function(data) {
            var d = JSON.parse(data);
            // console.log(d.data);
            if (d.status==="success") {
                let data = d.data;
                $("#bvn").removeClass('is-invalid');
                $("#bvn").addClass('is-valid');
                $("#is_valid_bvn").val('1');
                $("#fName").val("");
                $("#fName").val(data.firstname);
                $("#lName").val("");
                $("#lName").val(data.lastname);
                // console.log(data);
                var now = new Date(data.dob);

                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);

                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                // console.log(today);
                $('#DOB').val(today);

                if(data.email[0]){
                    // console.log(data.email[0]);
                    $("#email").val("");
                    $("#email").val(data.email[0]);
                }
                if(data.gender==="M"||data.gender==="Male"||data.gender==="male"){
                    $("#title").val('Mr.');
                }
                else if((data.gender==="F"||data.gender==="Female"||data.gender==="female")&&data.marital_status=='Single' ){
                    $("#title").val('Ms.');
                }else{
                    $("#title").val('Mrs.');
                }
                if(data.address){

                    $("#address").val(data.address[0]);
                }
                $("select#maritalStatus option") .each(function() { this.selected = (this.text == data.marital_status); });
                if(data.gender==="M"||data.gender==="Male"||data.gender==="male"){
                    $("select#gender option") .each(function() { this.selected = (this.text == "Male"); });
                }else if(data.gender==="F"||data.gender==="Female"||data.gender==="female"){
                    $("select#gender option") .each(function() { this.selected = (this.text == "Female"); });
                }
                $("select#countryId option") .each(function() { this.selected = (this.text == data.nationality); });
                let state= data.state_of_residence;
                state=state.replace(" State", "");


                $("select#stateId").children().filter(function(){
                    return this.text == state;
                }).prop('selected', true);
                const setAsyncTimeout = (cb, timeout = 0) => new Promise(resolve => {
                    setTimeout(() => {
                        cb();
                        resolve();
                    }, timeout);
                });

                const doStuffAsync = async () => {
                    await setAsyncTimeout(() => {
                        let event = new Event('change', { 'bubbles': true });
                        document.getElementById('stateId').dispatchEvent(event);
                        console.log('test');
                    }, 100);

                    await setAsyncTimeout(() => {
                        let lga = data.lga_of_residenc;
                // console.log(document.getElementById("cityId"));
                $("select#cityId").children().filter(function(){
                                    return this.text == lga;
                                }).prop('selected', true).change();
                    }, 100);
                }
            doStuffAsync();

            }else{
                $("#bvn").removeClass('is-valid');
                $("#bvn").addClass('is-invalid');
                $("#is_valid_bvn").val('0');
            }
        });
    }

    function verifyRC(e){
        var rc_num =e.target.value;
        var business_name =$("#nameOfBusiness").val();
        // console.log(e.target);
        $.get("/kyc/personal/rc",
        data = {
            rc_num:rc_num,
            business_name:business_name
        },
        function(data) {
            var d = JSON.parse(data);
            console.log(d.data);
            if (d.status==="success") {
                let data = d.data.details;
                $("#rcNumber").removeClass('is-invalid');
                $("#rcNumber").addClass('is-valid');
                $("#nameOfBusiness").removeClass('is-invalid');
                $("#nameOfBusiness").addClass('is-valid');
                $("#is_valid_rc").val('1');
                // console.log(data);
                if(data.address){
                    $("#businessAddress").val(data.address);
                }

                var now = new Date(data.date_reg);
                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                $('#DOBEstablishment').val(today);
                $("select#businessRegistered2 option") .each(function() { this.selected = (this.text == "Yes"); });
            }else{
                $("#rcNumber").removeClass('is-valid');
                $("#nameOfBusiness").removeClass('is-valid');
                $("#nameOfBusiness").addClass('is-invalid');
                $("#rcNumber").addClass('is-invalid');
                $("#is_valid_rc").val('0');
            }
        });
    }


    function verifyTIN(e){
        var tin =e.target.value;
        var business_name =$("#nameOfBusiness").val();
        // console.log(e.target);
        $.get("/kyc/personal/tin",
        data = {
            tin:tin,
            business_name:business_name
        },
        function(data) {
            var d = JSON.parse(data);
            console.log(d.data);
            if (d.status==="success") {
                let data = d.data.details;
                $("#tin").removeClass('is-invalid');
                $("#tin").addClass('is-valid');
                $("#nameOfBusiness").removeClass('is-invalid');
                $("#nameOfBusiness").addClass('is-valid');
                $("#is_valid_tin").val('1');
                // console.log(data);
                $("select#businessRegistered2 option") .each(function() { this.selected = (this.text == "Yes"); });
                if(data.tax_payer_name){
                    $("#nameOfDirector").val(data.tax_payer_name);
                }
            }else{
                $("#tin").removeClass('is-valid');
                $("#nameOfBusiness").removeClass('is-valid');
                $("#nameOfBusiness").addClass('is-invalid');
                $("#tin").addClass('is-invalid');
                $("#is_valid_tin").val('0');
            }
        });
    }

