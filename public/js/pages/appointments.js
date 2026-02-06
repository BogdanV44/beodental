$(document).ready(function()
{
    $('#dentists, #dates').on('change', function(){
        var dentistSelect = $('#dentists');
        var selectedDentist = dentistSelect.val();

        var dateSelect = $('#dates');
        var selectedDate = dateSelect.val();
        dateSelect.empty();

        var hourSelect = $('#appointment_hours');
        var selectedHour = hourSelect.val();
        hourSelect.empty();


        $.ajax({
            method: 'GET',
            url: "/ajax/dentist",
            data: {id: selectedDentist, date: selectedDate, hour: selectedHour},
            dataType: 'json',
            success: function(data){
                var dates = data['dates'];
                var hours = data['hours'];

                // Dates //
                let firstOption = document.createElement('option');
                firstOption.innerHTML = "choose date";
                firstOption.selected = true;
                firstOption.disabled = true;
                dateSelect.append(firstOption);

                dates.forEach(function(d){
                    let option = document.createElement("option");
                    option.value = d.value;
                    option.innerText = d.name;

                    if(d.value == selectedDate){
                        option.selected = true;
                    }
                    if(d.disabled){
                        option.innerText += " (No available appointments)";
                        option.value = "";
                        option.disabled = true
                    }

                    dateSelect.append(option);
                })
                // Dates End //

                // Hours //
                let firstOptionHour = document.createElement('option');
                firstOptionHour.innerHTML = "choose appointment time";
                firstOptionHour.selected = true;
                firstOptionHour.disabled = true;
                hourSelect.append(firstOptionHour);

                hours.forEach(function(h){
                    let option = document.createElement("option");
                    option.value = h.hour_id;
                    option.innerText = h.name;

                    if(h.hour_id == selectedHour){
                        option.selected = true;
                    }
                    if(h.disabled){
                        option.innerText += " (Already booked)";
                        option.value = "";
                        option.disabled = true
                    }

                    hourSelect.append(option);
                })
                // Hours End //
            }
        })
    })
})

function openCancelModal(appointmentId)
{
    $('.modal_confirmation').show();

    $('#confirm-button').on('click', () => {
        let appointmentNote = $('#appointment_note').val();

        if(appointmentNote === ""){
            $('#error-message').show();
            return;
        }
        else {
            $('#error-message').hide();
        }

        $.ajax({
            method: 'POST',
            url: "/ajax/cancel-appointment",
            data: {
                _token: $('input[name="_token"]').val(),
                id: appointmentId,
                appointment_note: appointmentNote,
            },
            dataType: 'json',
            success: function(data){
                window.location.reload();
            }
        })
    })

    $('.close-button, .close').on('click', function() {
        $('.modal_confirmation').hide();
        $('#appointment_note').val("");
        $('#error-message').hide();
    })
}
