<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
    
            //const modal = document.querySelector('#interest-calculate');
    
            
            // var price_for_five_year = document.getElementById("p_five").innerText;
            // var price_for_ten_year = document.getElementById("p_ten").innerText;
            //console.log(span_Text)
           
            

            $('#interest-calculate').click(function(){
                //alert('test')

                const principle_amount = $("input[name='principle']").val();
                const month_amount = $("input[name='month']").val();           
                const interest_amount = $("input[name='interest']").val(); 

                //console.log(principle)

                var percent = (parseFloat(principle_amount*(interest_amount/100)*1));
                console.log(percent)
                let total_price = int(principle_amount) + int(percent);
                console.log(total_price)
                var per_month = (total_price / month_amount);
                //console.log(per_month)
                //document.getElementById("monthly_pay").innerText=parseFloat(per_month).toFixed(2);
                document.getElementById("monthly_pay").value = per_month;
                
            });

            function fun(){  
                document.getElementById("myForm").reset();  
            }   
                                

            

        });
    
    
    
    </script>
    