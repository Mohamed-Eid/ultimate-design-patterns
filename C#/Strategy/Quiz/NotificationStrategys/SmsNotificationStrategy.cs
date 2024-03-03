using dotnet.Strategy.Quiz.Interfaces;

namespace dotnet.Strategy.Quiz.NotificationStrategys;

public class SmsNotificationStrategy : INotificationStrategy
{
    public void SendNotification(string message)
    {
        Console.WriteLine($"Sending SMS: {message}");
    }
}