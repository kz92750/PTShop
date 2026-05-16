using System;

namespace TuningShopAPI.models
{
	public class CartItem
	{
		public int Id { get; set; }
		public int? UserId { get; set; }
		public int ProductId { get; set; }
		public Product Product { get; set; }
		public int Qty { get; set; } = 1;
		public string SessionId { get; set; }
		public DateTime AddedAt { get; set; } = DateTime.UtcNow;
	}
}
