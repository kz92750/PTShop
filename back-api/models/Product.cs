using System;

namespace TuningShopAPI.models
{
	public class Product
	{
		public int Id { get; set; }
		public int? CategoryId { get; set; }
		public Category Category { get; set; }
		public string Sku { get; set; }
		public string Name { get; set; }
		public string Description { get; set; }
		public decimal Price { get; set; }
		public int Stock { get; set; }
		public string Images { get; set; } // JSON array as string
		public DateTime CreatedAt { get; set; } = DateTime.UtcNow;
	}
}
