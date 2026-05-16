using System;
using System.Collections.Generic;

namespace TuningShopAPI.models
{
	public class Order
	{
		public int Id { get; set; }
		public int UserId { get; set; }
		public decimal Total { get; set; }
		public string Status { get; set; } = "pending";
		public string Address { get; set; }
		public DateTime CreatedAt { get; set; } = DateTime.UtcNow;
		public List<OrderItem> Items { get; set; }
	}
}
