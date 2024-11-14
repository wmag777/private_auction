document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const bidForm = document.getElementById('bidForm');
    
    if (bidForm) {
        bidForm.addEventListener('submit', function(event) {
            const amount = document.getElementById('amount').value;
            const email = document.getElementById('email').value;
            
            if (parseFloat(amount) <= 0) {
                event.preventDefault();
                alert('Please enter a valid bid amount greater than 0');
                return false;
            }
            
            if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                event.preventDefault();
                alert('Please enter a valid email address');
                return false;
            }
        });
    }

    // Auto-dismiss alerts after 9 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }, 9000);
    });
});
