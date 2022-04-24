<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
    
            $('#interest-calculate').click(function(){
                //alert('test')

                var principle_amount = parseInt($("input[name='principle']").val());
                var month_amount = parseInt($("input[name='month']").val());           
                var interest_amount = parseInt($("input[name='interest']").val()); 

                
                var percent = parseInt((principle_amount*interest_amount*(month_amount/12))/100);
                //console.log(percent)
                var total_price = parseInt(principle_amount + percent);
               
                var per_month = (total_price / month_amount);
                //document.getElementById("monthly_pay").innerText=parseFloat(per_month).toFixed(2);
                document.getElementById("monthly_pay").value = parseInt(per_month);
                
            });

            // $('.clear').click(function(){ 
            //     document.getElementById("loan_month").reset();  
            //     document.getElementById("loan_amount").reset();  
            //     document.getElementById("loan_interest").reset();  
            //     document.getElementById("monthly_pay").reset();  
            // }   
                        

        });
    
    
    
    </script>
    