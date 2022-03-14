$(document).ready(function() {
    $('.modal').MultiStep({

        data: [{
            content: 'Hi!!',
            label: 'Welcome'
        }, {
            content: `You can have skip options`,
            label: 'Device'

        }, {
            content: `You can have skip options`,
            label: 'KYC'

        }, {
            content: `<small>You can include html content as well!</small><br><br>
               <div class="form-group">
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                 </div>
               `,
            label: 'Loan'

        }, {
            content: `This is the end<br>Hold your breath and count to ten`,
            label: 'Rules'
        }],
        title: 'Welcome to Tradelenda',

        modalSize: 'md'
    });
});