                        <button onclick="updateQuantity(${index}, 1)" class="text-green-500 px-1">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button onclick="removeItem(${index})" class="text-red-500 ml-2">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>`;
            });
            
            container.innerHTML = html;
            totalEl.textContent = `Rp ${total.toLocaleString('id-ID')}`;
            hiddenInput.value = JSON.stringify(cart);
        }
        
        function updateQuantity(index, delta) {
            const item = cart[index];
            item.quantity += delta;
            
            if (item.quantity <= 0) {
                cart.splice(index, 1);
            }
            
            updateCartUI();
        }
        
        function removeItem(index) {
            cart.splice(index, 1);
            updateCartUI();
        }
        
        function calculateChange() {
            const payment = parseFloat(document.getElementById('payment').value) || 0;
            const totalText = document.getElementById('total_amount').textContent;
            const total = parseFloat(totalText.replace(/[^\d]/g, '')) || 0;
            
            const change = payment - total;
            document.getElementById('change_amount').textContent = 
                `Rp ${change >= 0 ? change.toLocaleString('id-ID') : '0'}`;
        }
    </script>
</body>
</html>
