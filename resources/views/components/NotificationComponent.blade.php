<!-- resources/views/components/NotificationComponent.blade.php -->

<div x-data="{ notifications: [] }" x-init="listenForNotifications" class="fixed bottom-4 left-4 z-50">
    <template x-for="(notification, index) in notifications" :key="index">
        <div x-text="notification.message" class="bg-gradient-to-r from-pink-500 via-pink-600 to-purple-600 text-white p-2 mb-2 rounded-lg shadow"></div>
    </template>

    <script>
        function listenForNotifications() {
            const messages = [
                'Kenneth Huang Just made a withdrawal.',
                '@brightprince just opt for master plan.',
                'Helen made a huge cashout on her daily returns.',
                'just made a withdrawal 20 minutes ago.',
                'Kelvin is going for premium.',
                'Kate made a withdrawal.',
                'Habeeb Just Deposited.',
                '@leonard323 made a withdrawal',
                // Add more messages as needed
            ];

            setInterval(() => {
                // Simulate receiving a new notification
                const newNotification = {
                    id: Date.now(),
                    message: getRandomMessage(),
                };

                // Update the notifications array
                this.notifications.push(newNotification);

                // Remove the notification after a certain duration
                setTimeout(() => {
                    this.notifications = this.notifications.filter(n => n.id !== newNotification.id);
                }, getRandomTimeout()); // Remove after a random interval
            }, getRandomTimeout()); // Send a new notification at a random interval

            function getRandomTimeout() {
                // Generate a random timeout between 5000ms (5 seconds) and 15000ms (15 seconds)
                return Math.floor(Math.random() * (15000 - 5000 + 1) + 5000);
            }

            function getRandomMessage() {
                // Randomly select a message from the messages array
                return messages[Math.floor(Math.random() * messages.length)];
            }
        }
    </script>
</div>
