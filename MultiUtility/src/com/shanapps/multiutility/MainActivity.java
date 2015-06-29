package com.shanapps.multiutility;

import android.annotation.TargetApi;
import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.daimajia.androidanimations.library.Techniques;
import com.daimajia.androidanimations.library.YoYo;

public class MainActivity extends Activity {

	int i = 0;

	@TargetApi(Build.VERSION_CODES.HONEYCOMB)
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		TextView tx = (TextView) findViewById(R.id.textView);
		TextView tx1 = (TextView) findViewById(R.id.textView2);
		final LinearLayout l1 = (LinearLayout) findViewById(R.id.linear);
		final LinearLayout l2 = (LinearLayout) findViewById(R.id.linear2);
		final TextView tx2 = (TextView) findViewById(R.id.textView3);
		final TextView tx4 = (TextView) findViewById(R.id.textView4);
		final Button b11 = (Button) findViewById(R.id.button1);
		final Button b2 = (Button) findViewById(R.id.button2);
		final Button b01 = (Button) findViewById(R.id.Button01);
		final Button b1 = (Button) findViewById(R.id.button);
		final EditText et1 = (EditText) findViewById(R.id.editText);
		final EditText et2 = (EditText) findViewById(R.id.editText2);
		final Button btnskip = (Button) findViewById(R.id.button);
		
		final EditText et01 = (EditText) findViewById(R.id.EditText01);
		final EditText et02 = (EditText) findViewById(R.id.EditText02);
		final EditText et03 = (EditText) findViewById(R.id.EditText03);
		final EditText et04 = (EditText) findViewById(R.id.EditText04);
		Typeface custom_font = Typeface.createFromAsset(getAssets(),
				"Montserrat-Bold.otf");
		Typeface custom_font1 = Typeface.createFromAsset(getAssets(),
				"mont.otf");
		tx.setTypeface(custom_font);
		tx1.setTypeface(custom_font1);
		et1.setTypeface(custom_font1);
		et01.setTypeface(custom_font1);
		et02.setTypeface(custom_font1);
		et03.setTypeface(custom_font1);
		et04.setTypeface(custom_font1);
		et2.setTypeface(custom_font1);
		tx4.setTypeface(custom_font1);
		b11.setTypeface(custom_font1);
		b2.setTypeface(custom_font);
		b01.setTypeface(custom_font);
		l2.setVisibility(View.INVISIBLE);
		b11.setVisibility(View.INVISIBLE);
		tx4.setVisibility(View.INVISIBLE);
		btnskip.setTypeface(custom_font1);
		b1.setTypeface(custom_font1);
		tx2.setTypeface(custom_font1);
		
		tx4.setOnClickListener(new View.OnClickListener() {
			@TargetApi(Build.VERSION_CODES.LOLLIPOP)
			@Override
			public void onClick(View v) {
				
				if (i == 1) {
				
					b11.setVisibility(View.INVISIBLE);
					tx4.setVisibility(View.INVISIBLE);
					YoYo.with(Techniques.SlideOutRight).duration(700)
							.playOn(findViewById(R.id.linear2));
					YoYo.with(Techniques.SlideInLeft).duration(700)
							.playOn(findViewById(R.id.linear));
					LinearLayout l = (LinearLayout) findViewById(R.id.linear2);
					
					final Handler handler = new Handler();
					handler.postDelayed(new Runnable() {
						@Override
						public void run() {
							tx2.setVisibility(View.VISIBLE);
							b1.setVisibility(View.VISIBLE);
						}
					}, 700);
					i = 0;

				}
				
			}
		});
		
		tx2.setOnClickListener(new View.OnClickListener() {
			@TargetApi(Build.VERSION_CODES.LOLLIPOP)
			@Override
			public void onClick(View v) {
				l2.setVisibility(View.VISIBLE);
				tx2.setVisibility(View.INVISIBLE);
				b1.setVisibility(View.INVISIBLE);
				YoYo.with(Techniques.SlideOutLeft).duration(700)
						.playOn(findViewById(R.id.linear));
				YoYo.with(Techniques.SlideInRight).duration(700)
						.playOn(findViewById(R.id.linear2));
				final Handler handler = new Handler();
				handler.postDelayed(new Runnable() {
					@Override
					public void run() {

						b11.setVisibility(View.VISIBLE);
						tx4.setVisibility(View.VISIBLE);
					}
				}, 700);

				i = 1;
			}
		});

		/*
		 * btnreg.setOnClickListener(new View.OnClickListener() {
		 * 
		 * @Override public void onClick(View v) {
		 * 
		 * } });
		 */

		/*
		 * btnback.setOnClickListener(new View.OnClickListener() {
		 * 
		 * @Override public void onClick(View v) { i = 0;
		 * YoYo.with(Techniques.SlideOutDown).duration(700)
		 * .playOn(findViewById(R.id.linear3));
		 * YoYo.with(Techniques.SlideOutDown).duration(700)
		 * .playOn(findViewById(R.id.linear2));
		 * YoYo.with(Techniques.SlideInUp).duration(700)
		 * .playOn(findViewById(R.id.linear));
		 * 
		 * l.setVisibility(View.INVISIBLE); l1.setVisibility(View.INVISIBLE);
		 * tx2.setVisibility(View.VISIBLE); b1.setVisibility(View.VISIBLE);
		 * 
		 * } });
		 */

		btnskip.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				Intent i = new Intent(getApplicationContext(),
						RegisterActivity.class);
				startActivity(i);
			}
		});
	}

	@Override
	public void onBackPressed() {
		// your code.
		if (i == 1) {
			final TextView tx4 = (TextView) findViewById(R.id.textView4);
			final Button b11 = (Button) findViewById(R.id.button1);
			b11.setVisibility(View.INVISIBLE);
			tx4.setVisibility(View.INVISIBLE);
			YoYo.with(Techniques.SlideOutRight).duration(700)
					.playOn(findViewById(R.id.linear2));
			YoYo.with(Techniques.SlideInLeft).duration(700)
					.playOn(findViewById(R.id.linear));
			LinearLayout l = (LinearLayout) findViewById(R.id.linear2);
			final TextView tx2 = (TextView) findViewById(R.id.textView3);
			final Button b1 = (Button) findViewById(R.id.button);
			final Handler handler = new Handler();
			handler.postDelayed(new Runnable() {
				@Override
				public void run() {
					tx2.setVisibility(View.VISIBLE);
					b1.setVisibility(View.VISIBLE);
				}
			}, 700);
			i = 0;

		}

	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.menu_main, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();

		// noinspection SimplifiableIfStatement
		if (id == R.id.action_settings) {
			return true;
		}

		return super.onOptionsItemSelected(item);
	}
}
